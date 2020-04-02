'use strict';

class Filter {
    constructor () {
        const worksMenuItem = document.querySelectorAll('.works-list__item');
        const worksItem = document.querySelectorAll('.gallery__item');

        function toggleActiveClass(active){
            worksMenuItem.forEach(item => {
              item.classList.remove('works-list__item--active');
            })
            active.classList.add('works-list__item--active');
        }
         
        function toggleItems(dataClass){
            if(dataClass === 'all'){
                for(let i = 0; i<worksItem.length; i++){
                    worksItem[i].style.display = 'block';
                }
            }else{
                for(let i = 0; i<worksItem.length; i++)
                worksItem[i].dataset.class === dataClass ? worksItem[i].style.display = 'block' : worksItem[i].style.display = 'none';
            }
        }

        for(let i = 0; i < worksMenuItem.length; i++){
            worksMenuItem[i].addEventListener('click', function(){
                toggleActiveClass(worksMenuItem[i]);
                toggleItems(worksMenuItem[i].dataset.class);
            });
        }
    }
}





export default Filter;