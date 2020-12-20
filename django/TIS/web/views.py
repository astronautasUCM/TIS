from django.shortcuts import render

# Create your views here.
def home(request):
    return render(request, template_name='web/index.html')

def cases(request):
    # TODO: make model and get here
    context = {'cases': ['case 1', 'case 2']}
    return render(request, template_name='web/cases.html', context=context)

def report(request):
    return render(request, template_name='web/report.html')
def about(request):
    return render(request, template_name='web/about.html')
