FROM python:3.6.4

COPY app /usr/src/app
WORKDIR /usr/src/app
RUN pip install django

EXPOSE 8000
CMD ["python", "manage.py", "runserver", "0.0.0.0:8000"]
