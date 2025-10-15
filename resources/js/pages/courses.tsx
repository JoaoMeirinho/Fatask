interface ResponseCourses {
    courses:Course[];
}
interface Course {
    id: number;
    name: string;
}



const Courses = ({ courses } : ResponseCourses) => {
    // console.log(arr);
  return (
    <div>
      <h1>Cursos: {
      courses.map((course) => (
        <li key={course.id}>{course.name}</li>
      ))
      }
      </h1>
    </div>
  );
};

export default Courses;