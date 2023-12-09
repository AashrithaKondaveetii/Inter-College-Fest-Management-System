from django.urls import path
from . import views

urlpatterns = [
    path('', views.home, name="home"),
    path('<int:year>/<str:month>/', views.home, name="home"),
    path('add_event', views.add_event, name='add-event'),
    path('events', views.all_events, name="list-events"),
    path('add_venue', views.add_venue, name='add-venue'),
    path('show_venue/<venue_id>', views.show_venue, name='show-venue'), 
    path('list_venues', views.list_venues, name='list-venues'),
    path('delete_event/<event_id>', views.delete_event, name='delete-event'), 
    path('delete_venue/<venue_id>', views.delete_venue, name='delete-venue'), 
]