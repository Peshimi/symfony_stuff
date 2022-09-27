# symfony_stuff
> my first steps with framework - from tutorials to my own website

## helpful links
- https://dillinger.io
-> online markdown editor (honestly, taught me how to write readme like this one)
- https://docs.github.com/en/get-started/importing-your-projects-to-github/importing-source-code-to-github/adding-locally-hosted-code-to-github
-> reminded me how to add existing source code to GitHub from command line
**some problems, which have been solved**
- https://stackoverflow.com/questions/26505980/github-permission-denied-ssh-add-agent-has-no-identities 
-> "Permission denied (publickey)" error suprised me, moreover I have already generated key in my directory; all I needed to do was one command line:
```sh
ssh-add ~/.ssh/path/to/my/private/key
```
- https://stackoverflow.com/questions/20467179/git-push-rejected-non-fast-forward
-> at the end of creating my repo, I couldn't push my first commit; everything started work after:
```sh
git fetch
git rebase origin/main
git push origin main
```

