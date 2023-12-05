
const itemFrame = document.querySelector('.portfolio__item__list');
const itemList = [{
  name: '08 杉山花代',
  img: 'img/',
  url:'https://hanayosugiyama.github.io/portfolio874/',
 
},  {
    name: '',
    img: 'img/',
    url:'',
   
  }, {
    name: '',
    img: 'img/',
    url:'',
   
  }];


  itemList.forEach((i) => {
    const {
      name,
      img,
      url,
    } = i;
    const itemContent = `<li><a href="${url}" class="gallery" data-group="gallery"><div class="portfolio__item__img"><img src="${img}" alt="${name}"></div>
  <div class="portfolio__item__text"><b>${name}ポートフォリオ</b></div</a></li>`;
    itemFrame.insertAdjacentHTML('beforeend', itemContent);
  })