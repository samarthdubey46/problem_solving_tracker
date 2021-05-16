import React, {useEffect, useState} from 'react';
import ReactDOM from 'react-dom';
import {A as A_p, B as B_p, C1 as C1_p, C2 as C2_p, D2 as D2_p, D1 as D1_p} from './data'
import './Nav.css'
function TotalCompleted() {
    let api_url = 'http://127.0.0.1:8000/api/'
    let username = 'samarthdubey46'
    let obj = {
        'A': A_p,
        'B': B_p,
        'C1': C1_p,
        'C2': C2_p,
        'D1': D1_p,
        'D2': D2_p
    }
    let email = 'samarthdubey46@gmail.com'
    const [active, setactive] = useState('A');
    const [codeForcesList, setcodeForcesList] = useState({})
    const [JuniorSheetData, setJuniorSheetData] = useState({})
    let [allCompleted, setallCompleted] = useState({})
    let GetRequest = async (url) => {
        console.log('start')
        let res = await fetch(url, {method: 'GET'})
        let json = await res.json()
        return json
    }
    useEffect(() => {
        (async () => {
            let url_code = api_url + `codeforces_problem/${username}`;
            let url_all = api_url + `all_problems/${email}`
            let codeforcesList = await GetRequest(url_code)
            let all_problems = await GetRequest(url_all)
            let arr = {}
            if (all_problems !== null) {
                setJuniorSheetData(all_problems)
                arr = {...all_problems}
            }
            if (codeforcesList !== null) {
                setcodeForcesList(codeforcesList)
                arr = {...arr, ...codeforcesList}
            }
            setallCompleted(arr)
        })()
    }, [])

    return (
        <div className='container'>
            <div>
                <nav>
                    <ul className="pagination">

                        <li  id="A" className={active === 'A' ? 'page-item cursor active' : 'page-item cursor'}>
                            <a onClick={() => setactive('A')} className="page-link">A
                            </a>
                        </li>

                        <li id="B" className={active === 'B' ? 'page-item cursor active' : 'page-item cursor'}>
                            <a onClick={() => setactive('B')} className="page-link">B
                            </a>
                        </li>
                        <li id="C1" className={active === 'C1' ? 'page-item cursor active' : 'page-item cursor'}>
                            <a onClick={() => setactive('C1')} className="page-link">C1
                            </a>
                        </li>
                        <li id="C2" className={active === 'C2' ? 'page-item cursor active' : 'page-item cursor'}>
                            <a onClick={() => setactive('C2')} className="page-link">C2
                            </a>
                        </li>
                        <li id="D1" className={active === 'D1' ? 'page-item cursor active' : 'page-item cursor'}>
                            <a onClick={() => setactive('D1')} className="page-link">D1
                            </a>
                        </li>
                        <li id="D2" className={active === 'D2' ? 'page-item cursor active' : 'page-item cursor'}>
                            <a onClick={() => setactive('D2')} className="page-link">D2</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <table className="table">
                <thead className="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Level</th>
                    <th scope="col">Verdict</th>

                </tr>
                </thead>
                <tbody>
                {obj[active].map((item,index) => {
                    let status = '-'
                    let color = 'white';
                    let text_color = 'black';
                    let key = [item['code'] + item['level']];
                    let a_color = '#0275d8'
                    let url = item['url']
                    let target = '_blank'
                    if (allCompleted[key] !== null && allCompleted[key] !== undefined) {
                        status = allCompleted[key]['status'] === 'OK' ? 'Accepted' : allCompleted[key]['status']
                        if (status === 'Accepted') {
                            color = '#5AA900FF'
                            text_color = 'white'
                            a_color = 'white'
                        } else {
                            color = '#d30513'
                            text_color = 'white'
                            a_color = 'white'

                        }
                    }
                    if(JuniorSheetData[key] !== null && JuniorSheetData[key] !== undefined){
                        url = `/problem/${JuniorSheetData[key]['id']}`
                        target = ''
                    }
                    return (
                        <tr id={index} style={{backgroundColor: color}}>
                            <th style={{color: text_color}} scope="row">{item['id']}</th>
                            <td><a style={{color: a_color}}  href={url} target={target}>{item['Name']}</a></td>
                            <td style={{color: text_color}}>{item['level']}</td>
                            <td style={{color: text_color}}>{status}</td>
                        </tr>
                    )
                })}
                </tbody>
            </table>
        </div>
    );
}

export default TotalCompleted;

if (document.getElementById('junior')) {
    ReactDOM.render(<TotalCompleted/>, document.getElementById('junior'));
}

// </div>
