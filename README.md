# personal-site

My personal site, written using HTML & CSS, Ruby, and Jekyll

## Workflow

1. Development:
    a. Install Ruby and Jekyll.
    b. Install all included gems: `bundle install`
    c. Start the development server locally: `bundle exec jekyll serve`
2. Dockerization:
    a. Build the docker container locally: `docker build -t vhafener/personalsite:1.X.X`
    b. Push the docker container to docker hub: `docker push vhafener/personalsite:1.X.X`
3. Deployment to k3s:
    a. Have k3s pull the container by name.
