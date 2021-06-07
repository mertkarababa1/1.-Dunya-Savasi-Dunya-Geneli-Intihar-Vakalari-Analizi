export default class{
    
/**
 * @param {HTMLTableElement} root 
 */

    constructor(root) {

        this.root = root;

    }

    /**
     * 
     * @param {string[]} data 
     * @param {string[]} headerColumns 
     */

    update(data, headerColumns = []) {
        this.clear();
        this.setHeader(headerColumns);
        this.setBody(data);

    }

    clear() {
        this.root.innerHTML = "";
    }

    /**
     * 
     * @param {string[]} headerColumns 
     */



    setHeader(headerColumns) {

        this.root.insertAdjacentHTML("afterbegin", `


        <thead>
        <tr>
        ${ headerColumns.map(text => `<th>${text}</th>`).join("") }
        </tr>
        </thead>   
        `);
    }


    /**
     * 
     * @param {string[][]} data 
     */

    setBody(data){

        const rowsHtml = data.map(row => {
            return `
            <tr>
               ${ row.map(text => `<td>${ text }</td>`).join("") }
            </tr>
            `;
        });

        this.root.insertAdjacentHTML("beforeend", `
        
        <tbody>
           ${ rowsHtml.join("") } 
        </tbody>
        
        
        `);


    }



}