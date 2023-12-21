FROM httpd:2.4

COPY ./index.html /usr/local/apache2/htdocs/
COPY ./contact.html /usr/local/apache2/htdocs/
COPY ./parcours.html /usr/local/apache2/htdocs/
COPY ./projets.html /usr/local/apache2/htdocs/
COPY ./skills.html /usr/local/apache2/htdocs/
COPY ./assets/ /usr/local/apache2/htdocs/assets
 
EXPOSE 80