window.addEventListener("load",(()=>{!function(){const{masonry:e}=NeveProperties;if(!e||!1===e)return!1;const o=wp.customize;let t;["neve_blog_covers_min_height","neve_blog_grid_spacing","neve_blog_separator_width","neve_blog_content_padding"].forEach((e=>{const i=o(e);if(void 0===i)return!1;i.bind((()=>{clearTimeout(t),t=setTimeout((()=>{window.nvMasonry.layout()}),500)}))}))}()})),window.wp.customize.bind("ready",(()=>{wp.customize.preview.bind("nv-opened-stt",(e=>{if(e){const e=document.querySelector("#scroll-to-top");if(!e)return;e.style.visibility="visible",e.style.opacity="1"}}))}));