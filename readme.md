```
mkdir wisecow-app
cd wisecow-app
npm init -y

```

```
sudo apt update
sudo apt install nodejs npm -y

```

```
node -v
npm -v

```

```
npm init -y

```
```
npm install cowsay
```

nano index.js
```
const express = require('express');
const cowsay = require('cowsay');
const app = express();
const PORT = process.env.PORT || 3000;

app.get('/', (req, res) => {
  const cowMessage = cowsay.say({
    text: 'Living your life is a task so difficult, it has never been attempted before.',
    e: 'oo',
    T: 'U '
  });

  res.setHeader('Content-Type', 'text/plain');
  res.send(cowMessage);
});

app.listen(PORT, () => {
  console.log(`WiseCow App running on port ${PORT}`);
});

```

vi Dockerfile
```
FROM node:18

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .

EXPOSE 3000
CMD ["node", "index.js"]

```

```
docker build -t wisecow-app .
docker run -d -p 3000:3000 wisecow-app

```



