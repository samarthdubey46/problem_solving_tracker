import React, {useState} from 'react';
import ReactDOM from 'react-dom';

function TotalCompleted() {

    const [value, onChange] = useState(new Date());

    return (
        <div>

        </div>
    );
}

export default TotalCompleted;

if (document.getElementById('calender')) {
    ReactDOM.render(<TotalCompleted/>, document.getElementById('calender'));
}
