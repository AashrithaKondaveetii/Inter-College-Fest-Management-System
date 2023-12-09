from django.shortcuts import render
import calendar
from calendar import HTMLCalendar
from datetime import datetime
from django.http import HttpResponseRedirect
from .models import Event
from .forms import EventForm, EventFormAdmin

def add_event(request):
	submitted = False
	if request.method == "POST":
		if request.user.is_superuser:
			form = EventFormAdmin(request.POST)
			if form.is_valid():
				form.save()
				return HttpResponseRedirect('/add_event?submitted=True')
		else:
			form = EventForm(request.POST)
			if form.is_valid():
				# form.save()
				event = form.save(commit=False)
				event.manager = request.user #logged in user
				event.save()
				return HttpResponseRedirect('/add_event?submitted=True')
	else:
		#Just going to the page, not submitting
		if request.user.is_superuser:
			form = EventFormAdmin
		else:
			form = EventForm
		if 'submitted' in request.GET:
			submitted = True
	return render(request, 'events/add_event.html',
		{'form':form,'submitted':submitted})


def home(request, year=datetime.now().year, month=datetime.now().strftime('%B')):
	name = "Honey"
	month = month.capitalize()
	month_number = list(calendar.month_name).index(month)
	month_number = int(month_number)
	cal = HTMLCalendar().formatmonth(
		year, 
		month_number)
	now = datetime.now()
	current_year = now.year
	event_list = Event.objects.filter(
		event_date__year = year,
		event_date__month = month_number
		)
	time = now.strftime('%I:%M %p')
	return render(request, 
		'events/home.html', {
		"name": name,
		"year": year,
		"month": month,
		"month_number": month_number,
		"cal": cal,
		"current_year": current_year,
		"time":time,
		"event_list": event_list,
		})