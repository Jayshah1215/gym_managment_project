function simulateFIFO() {
    const frameSize = parseInt(document.getElementById('frameSize').value);
    const pagesInput = document.getElementById('pages').value.trim();
    const pages = pagesInput.split(',').map(page => parseInt(page.trim()));

    if (isNaN(frameSize) || frameSize <= 0) {
        alert('Please enter a valid frame size (a positive integer).');
        return;
    }

    if (pagesInput === '' || pages.some(isNaN)) {
        alert('Please enter a valid list of pages (comma-separated integers).');
        return;
    }

    const pageFaults = fifoPageReplacement(frameSize, pages);
    displayOutput(frameSize, pages, pageFaults);
}

function fifoPageReplacement(frameSize, pages) {
    const frame = new Array(frameSize).fill(-1); // Represents empty frame slots
    let pageFaults = 0;
    let frameIndex = 0;

    const output = [];

    for (let page of pages) {
        if (!frame.includes(page)) {
            const replacedPage = frame[frameIndex];
            frame[frameIndex] = page;
            frameIndex = (frameIndex + 1) % frameSize;
            pageFaults++;

            // Prepare output for this step
            output.push({
                Pages: [...frame],
                'Page Fault?': `*`
            });
        } else {
            // Prepare output for this step
            output.push({
                Pages: [...frame],
                'Page Fault?': ''
            });
        }
    }

    return { pageFaults, output };
}

function displayOutput(frameSize, pages, { pageFaults, output }) {
    const outputDiv = document.getElementById('output');
    outputDiv.innerHTML = `<p style="font-weight: bold;font-size:20px;">Page Faults: ${pageFaults}</p>`;
    const table = document.createElement('table');
    const headerRow = table.insertRow();
    headerRow.insertCell().textContent = 'Step';
    headerRow.insertCell().textContent = 'Pages in Frame';
    headerRow.insertCell().textContent = 'Page Fault?';

    output.forEach((step, index) => {
        const row = table.insertRow();
        row.insertCell().textContent = index + 1;
        row.insertCell().textContent = step.Pages.join(', ');
        row.insertCell().textContent = step['Page Fault?'];
    });

    outputDiv.appendChild(table);
}
