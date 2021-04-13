from django.contrib import admin

from .models import Author, Book


class BookInline(admin.TabularInline):
    model = Book
    extra = 3


class AuthorAdmin(admin.ModelAdmin):
    fieldsets = [
        (None, {'fields': ['author_firstname']}),
        (None, {'fields': ['author_lastname']}),
    ]
    inlines = [BookInline]

    list_display = ('author_firstname', 'author_lastname')
    search_fields = ['author_firstname', 'author_lastname']


class BookAdmin(admin.ModelAdmin):
    fieldsets = [
        (None, {'fields': ['author']}),
        (None, {'fields': ['book_name']}),
        ('Date information', {'fields': ['pub_date']}),
    ]

    list_display = ('book_name', 'author', 'pub_date', 'was_published_recently')
    search_fields = ['book_name']
    list_filter = ['pub_date']


admin.site.register(Author, AuthorAdmin)
admin.site.register(Book, BookAdmin)
