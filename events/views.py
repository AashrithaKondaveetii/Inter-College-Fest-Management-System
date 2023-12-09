from django.shortcuts import render
import calendar
from calendar import HTMLCalendar
from datetime import datetime



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