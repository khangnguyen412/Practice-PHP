# kubernetes deploys:
# php-deployment.yaml
# mysql-pv.yaml
# mysql-deployment.yaml
# myPhpAdmin-deployment.yaml

# cd ~/practicePhp/testDeployPhp/testk8s

# build docker image
docker build -t testk8sphp .
docker tag testk8sphp:latest localhost:5001/testk8sphp
docker push localhost:5001/testk8sphp:latest 

# deploy to k8s 
kubectl delete -f php-deployment.yaml -f mysql-pv.yaml -f mysql-deployment.yaml
kubectl apply -f php-deployment.yaml -f mysql-pv.yaml -f mysql-deployment.yaml

# port-forward to k8s
# kubectl port-forward svc/webapp-sql 8000:80 --address 0.0.0.0
# kubectl port-forward svc/mysql 3306:3306 --address 0.0.0.0