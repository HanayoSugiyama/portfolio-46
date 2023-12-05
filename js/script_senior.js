//45期生
const itemFrame45 = document.querySelector('.portfolio__item__45list');
const itemList45 = [{
  name: 'aa',
  img: 'img/',
  url: '',
}, {
  name: 'aa',
  img: 'img/',
  url: '',
}];


itemList45.forEach((i) => {
  const {
    name,
    img,
    url,
  } = i;
  const itemContent45 = `<li><a href="${url}" class="gallery" data-group="gallery"><div class="portfolio__item__img"><img src="${img}" alt="${name}"></div>
  <div class="portfolio__item__text"><p>${name}</p></div></a></li>`;
  itemFrame45.insertAdjacentHTML('beforeend', itemContent45);
})

//43期生
const itemFrame43 = document.querySelector('.portfolio__item__43list');
const itemList43 = [{
  name: 'bb',
  img: 'img/',
  url: '',
}, {
  name: 'bb',
  img: 'img/',
  url: '',
}];


itemList43.forEach((i) => {
  const {
    name,
    img,
    url,
  } = i;
  const itemContent43 = `<li><a href="${url}" class="gallery" data-group="gallery"><div class="portfolio__item__img"><img src="${img}" alt="${name}"></div>
  <div class="portfolio__item__text"><p>${name}</p></div></a></li>`;
  itemFrame43.insertAdjacentHTML('beforeend', itemContent43);
})