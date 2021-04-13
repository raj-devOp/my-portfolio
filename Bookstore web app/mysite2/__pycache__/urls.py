from django.contrib import admin
from django.urls import include, path

urlpatterns = [
    path('polls/', include('polls.urls')),
    path('bookstore/', include('bookstore.urls')),
    path('admin/', admin.site.urls),
]