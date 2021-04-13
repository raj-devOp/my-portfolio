import datetime

from django.db import models
#from django.core.urlresolvers import reverse
from django.utils import timezone


class Author(models.Model):
    author_firstname = models.CharField(max_length=200)
    author_lastname = models.CharField(max_length=200)

    #def get_absolute_url(self):
       # return reverse('bookstore:detail', kwargs={'pk': self.pk})

    def __str__(self):
        return self.author_firstname + ' - ' + self.author_lastname


class Book(models.Model):
    author = models.ForeignKey(Author, on_delete=models.CASCADE)
    book_name = models.CharField(max_length=200)
   # book_category = models.CharField(max_length=200)

    pub_date = models.DateTimeField('date published')

    def __str__(self):
        return self.book_name

    def was_published_recently(self):
        now = timezone.now()
        return now - datetime.timedelta(days=1) <= self.pub_date <= now

    was_published_recently.admin_order_field = 'pub_date'
    was_published_recently.boolean = True
    was_published_recently.short_description = 'Published recently?'
