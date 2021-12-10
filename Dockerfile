FROM nginx:latest
COPY ./index.html /usr/share/nginx/html/index.html
ADD assets /usr/share/nginx/html/assets
RUN "chmod" "-R" "g+rwx" "/var"
RUN "chmod" "-R" "g+rwx" "/etc"
EXPOSE 8080
CMD ["/bin/sh", "-c", "sed -i 's/listen  .*/listen 8080;/g' /etc/nginx/conf.d/default.conf && exec nginx -g 'daemon off;'"]