# personal-site

My personal site, written using HTML & CSS, Ruby, and Jekyll. GitHub project cards generated using: https://github.com/lepture/github-cards

## Workflow

1. Development:
    * Install Ruby and Jekyll.
    * Install all included gems: `bundle install`
    * Start the development server locally: `bundle exec jekyll serve`
2. Dockerization:
    * Build the docker container locally: `docker build -t vhafener/personalsite:1.X.X`
    * Push the docker container to docker hub: `docker push vhafener/personalsite:1.X.X`
3. Deployment to k3s:
    * Have k3s pull the container by name.
