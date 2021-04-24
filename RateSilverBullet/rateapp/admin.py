from django.contrib import admin
from .models import Post, Feedback


class PostAdmin(admin.ModelAdmin):
    list_display = ('title', 'slug', 'image', 'status', 'created_on')
    list_filter = ("status",)
    search_fields = ['title', 'content']
    prepopulated_fields = {'slug': ('title',)}


class FeedbackInline(admin.TabularInline):
    model = Feedback
    extra = 3


admin.site.register(Post, PostAdmin)
admin.site.register(Feedback)