FROM webdevops/php-nginx-dev:8.0
RUN apt update &&\
    apt install -y curl &&\
    curl -fsSL https://deb.nodesource.com/setup_17.x | bash - &&\
    apt install -y nodejs &&\
    npm install -g yarn &&\
    yarn global add @vue/cli @vue/cli-service-global