from django.contrib import admin

from .models import Venue
from .models import Members

admin.site.register(Members)

@admin.register(Venue)
class VenueAdmin(admin.ModelAdmin):
	list_display = ('name', 'address', 'phone')
	ordering =('name',)
	search_fields = ('name', 'address')