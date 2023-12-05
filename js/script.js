
const itemFrame = document.querySelector('.portfolio__item__list');
const itemList = [{
  item: '',
  img: 'img/',
  url:'',
 
},  {
    item: '',
    img: 'img/',
    url:'',
   
  }, {
    item: '',
    img: 'img/',
    url:'',
   
  }];

    const itemContent = `<li><a href="${url}" class="gallery" data-group="gallery"><div class="portfolio__item__img"><img src="${img}" alt="${item}"></div>
  <div class="portfolio__item__text"><b>${item}</b></div></a></li>`;
    itemFrame.insertAdjacentHTML('beforeend', itemContent);
  