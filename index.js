const express = require('express');
const path = require('path');
const chalk = require('chalk');
const config = require('./config.json');

const app = express();

// View engine
app.set('views', path.join(__dirname, 'src/views'));
app.set('view engine', 'ejs');

// Static files
app.use(express.static(path.join(__dirname, 'public')));

// Make config available to all views
app.locals.config = config;

// Home
app.get('/', (req, res) => {
  res.render('index', { config });
});

// Placeholder routes matching original navbar links (customize as needed)
app.get('/roster', (req, res) => {
  res.status(501).send('Roster page — add your own content.');
});
app.get('/structures', (req, res) => {
  res.status(501).send('Structures page — add your own content.');
});
app.get('/discord', (req, res) => {
  res.status(501).send('Discord redirect — set a real URL in config.');
});
app.get('/apply', (req, res) => {
  res.status(501).send('Apply page — add your application form or redirect.');
});

// 404
app.get('*', (req, res) => {
  res.status(404).render('404', { config });
});

app.listen(config.port, () => {
  console.log(chalk.blue.bold(`\n  Stratis Department (EJS) running on port ${config.port}`));
  console.log(chalk.gray(`  → ${config.domain || `http://localhost:${config.port}`}\n`));
});
