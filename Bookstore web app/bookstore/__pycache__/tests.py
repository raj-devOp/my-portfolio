import datetime

from django.test import TestCase
from django.utils import timezone
from django.urls import reverse

from .models import Author, Book


def create_author(author_firstname, days):
    time = timezone.now() + datetime.timedelta(days=days)
    return Author.objects.create(author_firstname=author_firstname, pub_date=time)


class AuthorIndexViewTests(TestCase):
    def test_no_author(self):
        response = self.client.get(reverse('bookstore:index'))
        self.assertEqual(response.status_code, 200)
        self.assertContains(response, "No Author Books are available.")
        self.assertQuerysetEqual(response.context['latest_author_list'], [])

    def test_past_author(self):
        create_author(author_firstname="Past author.", days=-30)
        response = self.client.get(reverse('bookstore:index'))
        self.assertQuerysetEqual(
            response.context['latest_author_list'],
            ['<Author: Past author.>']
        )

    def test_future_author(self):
        create_author(author_firstname="Future author.", days=30)
        response = self.client.get(reverse('bookstore:index'))
        self.assertContains(response, "No Author books are available.")
        self.assertQuerysetEqual(response.context['latest_author_list'], [])

    def test_future_author_and_past_author(self):
        create_author(author_firstname="Past author.", days=-30)
        create_author(author_firstname="Future author.", days=30)
        response = self.client.get(reverse('bookstore:index'))
        self.assertQuerysetEqual(
            response.context['latest_author_list'],
            ['<Author: Past author.>']
        )

    def test_two_past_author(self):
        create_author(author_firstname="Past author 1.", days=-30)
        create_author(author_firstname="Past author 2.", days=-5)
        response = self.client.get(reverse('bookstore:index'))
        self.assertQuerysetEqual(
            response.context['latest_author_list'],
            ['<Author: Past author 2.>', '<Author: Past author 1.>']
        )


class AuthorDetailViewTests(TestCase):
    def test_future_author(self):
        future_author = create_author(author_firstname='Future author.', days=5)
        url = reverse('bookstore:detail', args=(future_author.id,))
        response = self.client.get(url)
        self.assertEqual(response.status_code, 404)

    def test_past_author(self):
        past_author = create_author(author_firstname='Past Author.', days=-5)
        url = reverse('bookstore:detail', args=(past_author.id,))
        response = self.client.get(url)
        self.assertContains(response, past_author.author_firstname)



