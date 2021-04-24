from django import forms
from rateapp.models import Feedback, RATE_CHOICE


class FeedbackForm(forms.ModelForm):
	# review_text = forms.CharField(widget=forms.Textarea(attrs={'class': 'materialize-textarea'}), required=False)
	# rating = forms.ChoiceField(choices=RATE_CHOICE, widget=forms.Select(), required=True)

	class Meta:
		model = Feedback
		fields = ['review_text', 'rating']
		widgets = {'review_text': forms.CharField(widget=forms.Textarea(attrs={'class': 'materialize-textarea'}), required=False), 'rating': forms.ChoiceField(choices=RATE_CHOICE, widget=forms.Select(), required=True)}
		labels = {'rating': 'Rating /5'}