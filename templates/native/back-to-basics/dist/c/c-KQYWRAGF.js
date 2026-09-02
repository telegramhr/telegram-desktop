import{a as d,d as $}from"https://st-p.rmcdn1.net/737e1971/dist/c/c-X74Z5VOK.js";import{a as w,e as B}from"https://st-p.rmcdn1.net/737e1971/dist/c/c-U7ZXZAMI.js";import{t as l,x as T}from"https://st-p.rmcdn1.net/737e1971/dist/c/c-PQJ4QJHB.js";import{C as m,D as a,F as b}from"https://st-p.rmcdn1.net/737e1971/dist/c/c-2TEG3X6N.js";import{a as I}from"https://st-p.rmcdn1.net/737e1971/dist/c/c-HGH7ALHE.js";import{a as x,d as E}from"https://st-p.rmcdn1.net/737e1971/dist/c/c-63VHG4CS.js";function k({name:e,size:t,url:s,type:r,showInitials:n,showTitle:u,className:c,children:i,bgColor:U,textColor:A,onError:N,...h}){let f=t?o[t]:o.regular,j=r==="user"||r==="settingsUser"||r==="commentsUser";return a(P,{...h,width:f,height:f,cursor:h.onClick?"pointer":void 0,backgroundColor:r==="user"?y.user:"transparent",className:c,children:a(d,{display:"flex",backgroundColor:U||y[r||g],width:"100%",height:"100%",justifyContent:"center",alignItems:"center",title:u?e:void 0,children:i?a(m,{children:i}):a(m,{children:s?a(F,{src:s,alt:e,onError:N}):n?a(R,{color:A||G[r||g],textStyle:t==="regular"?"subheading":r==="count"||t==="xsmall"?"small":"regular",children:j?L(e):e||"?"}):null})})})}var g,o,y,G,P,R,F,L,v,z=x(()=>{"use strict";T();$();B();b();g="user",o={large:128,regular:72,medium:48,small:32,xsmall:24},y={user:"lightGray",info:"orange",count:"white",settingsUser:"white",commentsUser:"white"},G={user:"black",settingsUser:"black",info:"white",count:"black",commentsUser:"darkGray"},P=l(d)`
  display: inline-block;
  border-radius: 50%;
  user-select: none;
  position: relative;
  overflow: hidden;
`,R=l(w)`
  text-transform: uppercase;
`,F=l("img")`
  top: 0;
  left: 0;
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
`,L=e=>{let[t,s]=e.split(" ");return s?t[0]+s[0]:t[0]};k.defaultProps={name:"?",size:"regular",type:g,showInitials:!0};v=k});function C(e){let t=e.size?o[e.size]:o.regular,s=e.url?[...new Set([_(e.url,t),e.url])].filter(Boolean):[],[r,n]=(0,p.useState)(0),u=s[r],[c,i]=(0,p.useState)(e.url);return c!==e.url&&(i(e.url),n(0)),a(v,{...e,url:u,onError:()=>{r>=s.length||n(r+1)}})}var p,S,_,q,D,H,Y,J=x(()=>{"use strict";z();p=E(I());b();S=[64,96,128,192,256],_=(e,t)=>{if(!e||H(e))return e;let s=e.split(".").pop(),r=q(t);return r?e.replace(`.${s}`,`_${r}.${s}`):""},q=e=>{let t=e*2;return S.reduce((s,r)=>t<=r&&t>s?r:s,S[0])},D=["u.test.readym.ag","u.readym.ag"],H=e=>{try{return D.includes(new URL(e).hostname)}catch{return!1}};C.defaultProps={size:"regular"};Y=C});export{o as a,z as b,_ as c,H as d,Y as e,J as f};
