from django.db import models

# Create your models here.
class Case(models.Model):
    name = models.CharField(max_length=64)
    description = models.CharField(max_length=2000)
    release_date = models.DateField()
