# Generated by Django 2.0.7 on 2018-07-05 10:58

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('bookstore', '0001_initial'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='book',
            name='book_category',
        ),
    ]