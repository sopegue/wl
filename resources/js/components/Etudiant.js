import React,{useState} from 'react';
import ReactDOM from 'react-dom';

function Type(){
    const [selected, setSelected] = useState(0);
    
    return(
        <div>
        <div className="form-group row">
            <label  htmlFor="typep" className="col-md-4 col-form-label text-md-right">Vous êtes </label>
            <div className="col-md-6">
                <select id="typep" onChange={()=>{if(selected===1) setSelected(0); else setSelected(1)}} className="form-control" name="typep" required autoComplete="typep">
                    <option value="stu">Etudiant</option>
                    <option value="prof">Professeur</option>
                </select>
            </div>   
        </div>
            {selected===1 ? (document.getElementById('typep').options[document.getElementById('typep').selectedIndex].value==='stu'? <Etudiant />:<Professeur />) :<Etudiant />}
        </div>
    );
}

function Etudiant() {
    return (
        <div className="form-group row">
            <label  htmlFor="niveau" className="col-md-4 col-form-label text-md-right">Niveau </label>
            <div className="col-md-6">
                <select className="form-control" name="niveau" required autoComplete="niveau">
                    <option>Licence</option>
                    <option>Master</option>
                    <option>Doctorat</option>
                </select>
            </div>
        </div>
    );
}
function Professeur() {
    return (
        <div className="form-group row">
            <label  htmlFor="poste" className="col-md-4 col-form-label text-md-right">Votre poste</label>
            <div className="col-md-6">
                <input id="poste" type="text" className="form-control" name="poste" required autoComplete="poste"/>
            </div>
        </div>
    );
}

//if (document.getElementById('etudiant')) {
    //if(document.getElementById('typep').options[document.getElementById('typep').selectedIndex].value==='stu')
        ReactDOM.render(<Type />, document.getElementById('type'));
    //else
        //ReactDOM.render(<Professeur />, document.getElementById('etudiant'));
//}

