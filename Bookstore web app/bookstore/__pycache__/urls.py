from django.urls import path
from django.conf.urls import url

from . import views

app_name = 'bookstore'
urlpatterns = [
    path('', views.IndexView.as_view(), name='index'),
    path('<int:pk>/', views.DetailView.as_view(), name='detail'),
    path('<int:pk>/results/', views.ResultsView.as_view(), name='results'),
    path('<int:author_id>/book/', views.book, name='book'),
    url(r'author/add/$', views.AuthorCreate.as_view(), name='author-add'),
    url(r'author/update/$', views.AuthorUpdate.as_view(), name='author-update'),
    #url(r'author/delete/$', views.AuthorDelete.as_view(), name='author-delete'),
]