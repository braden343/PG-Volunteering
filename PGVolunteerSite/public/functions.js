const projectTitle = document.getElementById('projectTitle');
//const projectUserId = document.getElementById('projectUserId');>
const projectDate = document.getElementById('projectDate');
const projectDetails = document.getElementById('projectDetails');
const projectType = document.getElementById('projectType');
const btnSubmit = document.getElementById('btnSubmit');

const database = firebase.database();
const rootRef = database.ref('projects');

btnSubmit.addEventListener('click', (e) => {
    e.preventDefault();
    //const autoId = rootRef.push().key
    //rootRef.child(autoId.value).set({
    database.ref('/projects/'+ projectTitle.value).set({
        project_title: projectTitle.value,
        project_date: projectDate.value,
        //project_userID: projectUserId.value,
        project_details: projectDetails.value,
        project_type: projectType.value
    });
});

rootRef.orderByKey().on('value', snapshot => {
    console.log(snapshot.val());
});
