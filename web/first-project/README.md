<h1 align="center">How to work team with Github</h1>

- Give a Task from leader

- Fetch all file from master branch
```
git pull origin master
```
- Each step, you need to commit on your local to easy following up what you did :
```
git add .
git commit -m "some message here"
```

- When finish task,create a new branch follow syntax: <name/feature or task> & push your code to github for leader review:
```
git checkout -b <name/feature or task>
git push origin <name/feature or task>
```