# Generated by Django 3.1.5 on 2023-11-27 20:38

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('events', '0003_auto_20231031_0850'),
    ]

    operations = [
        migrations.AddField(
            model_name='venue',
            name='owner',
            field=models.IntegerField(default=1, verbose_name='Venue Owner'),
        ),
    ]
