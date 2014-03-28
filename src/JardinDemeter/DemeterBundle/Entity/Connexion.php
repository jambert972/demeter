<?php

namespace JardinDemeter\DemeterBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

use Doctrine\ORM\Mapping as ORM;

/**
 * Connexion
 *
 * @ORM\Table(name="connexion")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="JardinDemeter\DemeterBundle\Entity\ConnexionRepository")
 */
class Connexion implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=12, nullable=false)
     */
    protected $login;

    /**
     * @var string
     *
     * @ORM\Column(name="passe", type="string", length=40, nullable=false)
     */
    protected $passe;
    
     /**
     * @var string
     *
     * @ORM\Column(name="groupe", type="string", length=255, nullable=false)
     */
    protected $groupe;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Connexion
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set passe
     *
     * @param string $passe
     * @return Connexion
     */
    public function setPasse($passe)
    {
        $this->passe = $passe;

        return $this;
    }

    /**
     * Get passe
     *
     * @return string 
     */
    public function getPasse()
    {
        return $this->passe;
    }

    /**
* Set modified
*
* @param \DateTime $modified
* @return User
*/
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
* Get modified
*
* @return \DateTime
*/
    public function getModified()
    {
        return $this->modified;
    }
    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }
    public function getSalt()
    {
        return null;
    }
    public function eraseCredentials()
    {
    }
    public function equals(UserInterface $user)
    {
        return $user->getLogin() == $this->getLogin();
    }

    public function getPassword() {
        return $this->passe;
    }

    public function getUsername() {
        return $this->login;
    }


    /**
     * Set groupe
     *
     * @param string $groupe
     * @return Connexion
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return string 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }
}
