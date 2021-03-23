docker build -t database-image -f database/Dockerfile . &&
docker build -t api-image -f api/Dockerfile . &&
docker build -t website-image -f website/Dockerfile .