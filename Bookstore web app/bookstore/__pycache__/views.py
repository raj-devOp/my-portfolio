from django.http import HttpResponseRedirect
from django.shortcuts import get_object_or_404, render
from django.urls import reverse
from django.views import generic
#from django.core.urlresolvers import reverse_lazy
#from django.utils import timezone
from django.views.generic.edit import CreateView, UpdateView, DeleteView

from .models import Book, Author


class IndexView(generic.ListView):
    template_name = 'bookstore/index.html'
    context_object_name = 'latest_author_list'

    def get_queryset(self):
        return Author.objects.all()


class DetailView(generic.DetailView):
    model = Author
    template_name = 'bookstore/detail.html'


class ResultsView(generic.DetailView):
    model = Author
    template_name = 'bookstore/results.html'


class AuthorCreate(CreateView):
    model = Author
    fields = ['author_firstname', 'author_lastname']


class AuthorUpdate(UpdateView):
    model = Author
    fields = ['author_firstname', 'author_lastname']


#class AuthorDelete(DeleteView):
   # model = Author
   # success_url = reverse_lazy('bookstore:index')


def book(request, author_id):
    author = get_object_or_404(Author, pk=author_id)
    try:
        selected_book = author.book_set.get(pk=request.POST['book'])
    except (KeyError, Book.DoesNotExist):
        return render(request, 'bookstore/detail.html', {
            'author': author,
            'error_message': "You didn't select a Book.",
        })
    else:
        selected_book.votes += 1
        selected_book.save()
        return HttpResponseRedirect(reverse('bookstore:results', args=(author.id,)))
