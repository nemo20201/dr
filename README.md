<div align="center">
<<<<<<< HEAD

<img src="./assets/vscode-math-to-image.png" width="125px" alt="logo">

<h1>Math » Image</h1>

📐 <em>We can help you render LaTeX math equations in any Markdown file! </em>

[![Azure DevOps builds (branch)](https://img.shields.io/azure-devops/build/MeowTeam/9f842be1-8208-4cb2-ab10-228d34a2c525/1/master?color=578a8a&label=azure%20pipelines&logo=azure-pipelines)](https://dev.azure.com/MeowTeam/vscode-math-to-image/_build/latest?definitionId=1&branchName=master)
[![Visual Studio Marketplace](https://img.shields.io/visual-studio-marketplace/v/MeowTeam.vscode-math-to-image?color=db8465&label=vs%20marketplace&logo=visual-studio)](https://marketplace.visualstudio.com/items?itemName=MeowTeam.vscode-math-to-image)
![Visual Studio Marketplace Downloads](https://img.shields.io/visual-studio-marketplace/d/MeowTeam.vscode-math-to-image?label=downloads&color=82a0ba)
![Visual Studio Marketplace Rating (Stars)](https://img.shields.io/visual-studio-marketplace/stars/MeowTeam.vscode-math-to-image?color=e89927)

=======
  <img src="https://raw.githubusercontent.com/spencerwooo/onedrive-vercel-index/main/public/header.png" alt="onedrive-vercel-index" />
  <h3><a href="/">onedrive-vercel-index</a></h3>
  <p><em>Yet another-another OneDrive index, powered by Vercel and Next.js</em></p>

  <img style="display: inline-block;" src="https://img.shields.io/badge/OneDrive-2C68C3?style=flat&logo=microsoft-onedrive&logoColor=white" alt="Next.js" />
  <img style="display: inline-block;" src="https://img.shields.io/badge/Next.js-black?style=flat&logo=next.js&logoColor=white" alt="Next.js" />
  <img style="display: inline-block;" src="https://img.shields.io/badge/Vercel-black?style=flat&logo=Vercel&logoColor=white" alt="Vercel" />
  <a href="https://github.com/spencerwooo/onedrive-vercel-index/discussions"><img style="display: inline-block;" src="https://img.shields.io/github/discussions/spencerwooo/onedrive-vercel-index?color=CF2B5B&labelColor=black&logo=github" alt="GitHub Discussions" /></a>
>>>>>>> 0b43420e7d28df3736b72ba462cfe9c207f2c2f4
</div>

This is a VS Code extension to help you convert a standard LaTeX math equation like `$E=mc^2$` to an image like <img src="https://render.githubusercontent.com/render/math?math=E%3Dmc%5E2"> (remote) or a local SVG which can be embedded inside Markdown files or websites that doesn't support rendering LaTeX yet. ~~(That's you GitHub!)~~

<<<<<<< HEAD
Read more about _Math to Image_ here:
- <a href="https://sm.ms/image/sErtzjdBYkR71pc" target="_blank"><img src="https://i.loli.net/2020/08/04/sErtzjdBYkR71pc.png" height="18px" ></a> **少数派：**[不支持 LaTeX 也能插入数学公式，这个小插件帮你实现「徒手渲染」](https://sspai.com/post/61877)。
- <a href="https://sm.ms/image/NQiuDlbxYeJBa1w" target="_blank"><img src="https://i.loli.net/2020/08/04/NQiuDlbxYeJBa1w.png" height="18px" ></a> **Medium:** [VS Code Math to Image: Write LaTeX Math Equations in GitHub Markdown the Easy Way!](https://medium.com/spencerweekly/vs-code-math-to-image-write-latex-math-equations-in-github-markdown-the-easy-way-9fa8b81dc910?source=friends_link&sk=cff035b443fb81f5b20a47370f23aed3)

<h2>Table of Contents</h2>

- [Demo](#demo)
- [Features](#features)
  - [Rendering remotely](#rendering-remotely)
  - [Rendering locally](#rendering-locally)
- [Extension Settings](#extension-settings)
- [Change Log](#change-log)

## Demo

![](assets/vscode-math-to-image.gif)

## Features

There are two modes in which we will render your math equations in Markdown:

* Locally (with MathJax and sourcing relative SVG), and...
* Remotely (with GitHub's LaTeX rendering server).

### Rendering remotely

This is actually a hack. GitHub won't render LaTeX equations inside normal places like GitHub README, but it can render them in Jupyter notebooks, so we took advantage of this feature, utilizing GitHub's equation rendering server to embed SVG equations in GitHub. (See here for details: [A hack for showing LaTeX formulas in GitHub markdown](https://gist.github.com/a-rodin/fef3f543412d6e1ec5b6cf55bf197d7b).)

Basically we can convert a standard LaTeX math equation like the *Gaussian Normal Distribution*...

```latex
$$
P(x) = \frac{1}{\sigma\sqrt{2\pi}} e^{\frac{-(x-\mu)^2}{2\sigma^2}}
$$
```

... to a rendered image tag with the help of GitHub's math rendering server:

```html
<div align="center"><img style="background: white;" src="https://render.githubusercontent.com/render/math?math=P(x)%20%3D%20%5Cfrac%7B1%7D%7B%5Csigma%5Csqrt%7B2%5Cpi%7D%7D%20e%5E%7B%5Cfrac%7B-(x-%5Cmu)%5E2%7D%7B2%5Csigma%5E2%7D%7D"></div>
```

<div align="center"><img style="background: white;" src="https://render.githubusercontent.com/render/math?math=P(x)%20%3D%20%5Cfrac%7B1%7D%7B%5Csigma%5Csqrt%7B2%5Cpi%7D%7D%20e%5E%7B%5Cfrac%7B-(x-%5Cmu)%5E2%7D%7B2%5Csigma%5E2%7D%7D"></div>

In addition to GitHub's rendering server, we also newly added support for CodeCogs' rendering server:

```html
<div align="center"><img style="background: white;" src="https://latex.codecogs.com/svg.latex?P(x)%20%3D%20%5Cfrac%7B1%7D%7B%5Csigma%5Csqrt%7B2%5Cpi%7D%7D%20e%5E%7B%5Cfrac%7B-(x-%5Cmu)%5E2%7D%7B2%5Csigma%5E2%7D%7D"></div>
```

<div align="center"><img style="background: white;" src="https://latex.codecogs.com/svg.latex?P(x)%20%3D%20%5Cfrac%7B1%7D%7B%5Csigma%5Csqrt%7B2%5Cpi%7D%7D%20e%5E%7B%5Cfrac%7B-(x-%5Cmu)%5E2%7D%7B2%5Csigma%5E2%7D%7D"></div>

### Rendering locally

Not everywhere accept external SVGs. To circumvent this type of scenario, we can render math equations directly to local SVGs (with MathJax), and embed these local SVGs into our Markdown as a workaround.

We can convert the same LaTeX math equation:

```latex
$$
P(x) = \frac{1}{\sigma\sqrt{2\pi}} e^{\frac{-(x-\mu)^2}{2\sigma^2}}
$$
```

To a local SVG like: `svg/e40qQ5G9jw.svg`, which will be saved to a dedicate folder called `svg`, and sourced inside the Markdown file that requires math-embedding.

> 🌸 NOTE: There used to be a demo SVG here, but Visual Studio Marketplace won't allow us to add local SVGs inside their README.

If you are reading this on GitHub, you can see that both of these methods work when we need to add math equations to READMEs or other Markdown files on GitHub.

See [examples](examples/example.md) for more math equation rendering scenarios, i.e, inline math, aligned environments...

## Extension Settings

You can specify the path to save the locally rendered SVG image. The settings are self-explanatory.

* **vscode-math-to-image.svgSavePath**:
  * `Current file directory`: Generated SVG files will be put in a folder under current file's directory.
  * `Current workspace directory`: Generated SVG files will be put in a folder under current workspace directory.
* **vscode-math-to-image.remoteRenderEngine**:
  * `GitHub`: Equations will be rendered with GitHub's rendering engine remotely.
  * `CodeCogs`: Equations will be rendered with CodeCogs' rendering engine remotely.
* **vscode-math-to-image.inlineSvgStyle**: Optional style for rendered inline SVG equations. Defaults to `transform: translateY(0.1em); background: white;`.
* **vscode-math-to-image.displaySvgStyle**: Optional style for rendered display SVG equations. Defaults to `background: white;`.

## Change Log

For version updates and bug fixes, please see: [CHANGELOG](CHANGELOG.md).

---

📐 **Math » Image** © TeamMeow. Released under the MIT License.

Authored and maintained by TeamMeow members.

> 🦁 We build things that go "meow" · [@GitHub](https://github.com/TeamMeow) · [@Members](https://github.com/orgs/TeamMeow/people?type=source)
=======
## Yoo, I'm Spencer Woo 👋

This is Spencer's OneDrive public directory listing. Feel free to download any files that you find useful. Reach me at: spencer.wushangbo [at] gmail [dot] com.

### Interesting files

| Route                                             | Details                                                                                         |
| :------------------------------------------------ | :---------------------------------------------------------------------------------------------- |
| [**🎻 Genshin playlist**](/🎻%20Genshin%20playlist) | Some of the OST that I like in Genshin Impact.                                                  |
| [**🍡 Genshin PV**](/🍡%20Genshin%20PV)             | Genshin Impact character teasers, PVs, and EPs (4 languages).                                   |
| [**🍏 Genshin emotes**](/🍏%20Genshin%20emotes)     | Genshin character emojis. Derived from Telegram stickers.                                       |
| [**🍊 Weibo emotes**](/🍊%20Weibo%20emotes)         | Weibo emojis. Derived from repo: [ArvinZJC/WeiboEmoji](https://github.com/ArvinZJC/WeiboEmoji). |

## Licensing

<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>

- This work is licensed under a [Creative Commons Attribution-ShareAlike 4.0 International License](http://creativecommons.org/licenses/by-sa/4.0/).
- All Genshin Impact content and artwork belongs to [miHoYo](https://genshin.mihoyo.com/).

---

> [@Portfolio](https://spencerwoo.com/) · [@Blog](https://blog.spencerwoo.com/) · [@GitHub](https://github.com/spencerwooo)
>>>>>>> 0b43420e7d28df3736b72ba462cfe9c207f2c2f4
