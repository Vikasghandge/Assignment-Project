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

