<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php

namespace App\Models;

class User
{
    /**
     * Campos que se pueden asignar masivamente
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'institute_id',
        'email_verified_at',
        'remember_token',
    ];

    /**
     * Campos ocultos en la serialización
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public $id;
    public $name;
    public $email;
    public $password;
    public $role_id;
    public $institute_id;
    public $email_verified_at;
    public $remember_token;
    public $created_at;
    public $updated_at;

    public function __construct($attributes = [])
    {
        foreach ($attributes as $key => $value) {
            if (in_array($key, $this->fillable) || property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
        
        if (!isset($this->created_at)) {
            $this->created_at = date('Y-m-d H:i:s');
        }
        if (!isset($this->updated_at)) {
            $this->updated_at = date('Y-m-d H:i:s');
        }
    }

    /**
     * Obtener el rol del usuario
     */
    public function role()
    {
        // Relación con modelo Role
        return (object)[
            'id' => $this->role_id,
            'name' => $this->getRoleName()
        ];
    }

    /**
     * Obtener el instituto del usuario
     */
    public function institute()
    {
        // Relación con modelo Institute
        return (object)[
            'id' => $this->institute_id,
            'name' => 'Instituto de Educación Superior'
        ];
    }

    /**
     * Obtener proyectos del usuario
     */
    public function projects()
    {
        // Relación con modelo Projects
        return [];
    }

    private function getRoleName()
    {
        $roles = [
            1 => 'Administrador',
            2 => 'Coordinador',
            3 => 'Docente',
            4 => 'Tutor',
            5 => 'Estudiante'
        ];
        
        return $roles[$this->role_id] ?? 'Desconocido';
    }
}
=======
=======
>>>>>>> origin/Cambios__Sofia
=======
>>>>>>> origin/Integracion_ia_eduardo
<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/CAMBIOS_CRUD_PROYECTOS_CESAR_FRANK
=======
>>>>>>> origin/Cambios__Sofia
=======
>>>>>>> origin/Integracion_ia_eduardo
