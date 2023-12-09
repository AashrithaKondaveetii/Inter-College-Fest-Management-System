from django.urls import path
from . import views

urlpatterns = [
    path('', views.home, name="home"),
    path('<int:year>/<str:month>/', views.home, name="home"),
    path('add_event', views.add_event, name='add-event'),
    path('events', views.all_events, name="list-events"),
    path('add_venue', views.add_venue, name='add-venue'),
    path('show_venue/<venue_id>', views.show_venue, name='show-venue'), 
]