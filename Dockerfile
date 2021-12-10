FROM nginx:latest
COPY ./index.html /usr/share/nginx/html/index.html
ADD assets /usr/share/nginx/html/assets
RUN "chmod" "-R" "g+rwx" "/var"
RUN "chmod" "-R" "g+rwx" "/etc"