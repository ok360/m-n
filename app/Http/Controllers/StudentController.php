<?php

namespace App\Http\Controllers;

use Mail;
use App\Nic;
use App\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//             $nic = Nic::with ('student')->pluck ('nic_no');
//        return dd ($nic);


        $students= Student::with ('nic')->orderBy ('name','desc')->paginate (9);

        return view ('student.index',compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//            Student::create($request->all ());

                $student= new Student();
                $student->name=$request->name;
                $student->class= $request->class;
                $student->save ();
                $nic=new Nic();
                $data=[
                    'name'=>$request->name
                    ];
         
            Mail::send('emails.student-reg',$data,function ($message)
            {
                $message->to('test@gmail.com');
                $message->from('from@gmail.com');
            });

            return redirect ('student')->with ('success','Record created Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
//        $student =  Student::find($id);

        return view('student.edit',compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name= $request->name;
        $student->class= $request->class;
        $student->save();
        return redirect ('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy ($id);
        return back ()->with (['success'=>'Record Deleted Successfully']);
    }
    public function test()
    {

         $students = Student::with ('subjects','nic')->take(4)->get ();
//         return dd ($students);
        return view('student.test',compact ('students'));
    }
}
