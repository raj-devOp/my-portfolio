# Generated by Django 3.0.3 on 2021-04-23 01:36

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('rateapp', '0003_auto_20210423_0132'),
    ]

    operations = [
        migrations.AlterField(
            model_name='post',
            name='image',
            field=models.ImageField(blank=True, upload_to='images'),
        ),
    ]
