const f=document.getElementById("container_formulaciones_tentativas_aditivos_lodo"),h=document.getElementById("btnAddFormulacionEnsayoAditivoLodo");let a=0;h&&h.addEventListener("click",x=>{x.preventDefault();let l,r,n,s,e;l=el("div.flex justify-between mb-2"),r=el("button.bg-red-600 bg-opacity-70 border border-red-600 w-7 h-auto text-white flex justify-center items-center rounded-l-md hover:bg-red-500 cursor-pointer transition-all duration-500","-"),n=el("div.w-full flex bg-gray-100 gap-2 p-2"),r.addEventListener("click",t=>{t.preventDefault(),l.remove()}),s=el("input.form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1",{placeholder:"Lote",name:`aditivos[${a}][lote]`}),mount(n,s),e=document.createElement("select"),e.className="form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1",e.name=`aditivos[${a}][aditivo]`;const i=document.createElement("option");i.value="",i.textContent="Aditivo",i.disabled=!0,i.selected=!0,e.appendChild(i);const m=document.createElement("option");m.value="SD",m.textContent="S/D",e.appendChild(m),aditivos.forEach(t=>{const v=document.createElement("option");v.value=t.id,v.textContent=t.nombre,e.appendChild(v)}),n.appendChild(e);const o=document.createElement("input");o.className="hidden form-control text-xs rounded-l-none p-2 w-1/2",o.placeholder="Comentario",o.name=`aditivos[${a}][comentario]`,n.appendChild(o),e.addEventListener("change",function(){const t=this;t.value==="SD"?(t.classList.add("w-1/2"),o.classList.remove("hidden")):(t.classList.remove("w-1/2"),o.classList.add("hidden"))}),s=el("input.form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1",{placeholder:"Concentración",name:`aditivos[${a}][concentracion]`}),mount(n,s);const d=document.createElement("select");d.className="form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1",d.name=`aditivos[${a}][unidad]`;const c=document.createElement("option");c.value="",c.textContent="Unidad",c.disabled=!0,c.selected=!0,d.appendChild(c);const p=document.createElement("option");p.value="lt/m³",p.textContent="lt/m³",d.appendChild(p);const u=document.createElement("option");u.value="kg/m³",u.textContent="kg/m³",d.appendChild(u),n.appendChild(d),mount(l,r),mount(l,n),mount(f,l),a++});
