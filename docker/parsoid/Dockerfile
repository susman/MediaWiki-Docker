FROM node:9-stretch

COPY mediawiki/parsoid /app
RUN cd /app && rm .git && npm install --production

EXPOSE 8000

COPY docker/parsoid/localsettings.js /app/localsettings.js

CMD ["/app/bin/server.js", "-n4"]
