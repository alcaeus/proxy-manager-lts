<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace ProxyManager\Proxy;

use Zend\Stdlib\Hydrator\HydratorInterface;

/**
 * Hydrator proxy - allows access to protected members of a proxied object
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface HydratorProxyInterface extends ProxyInterface, HydratorInterface
{
    /**
     * Set the reflection properties to be used to access members of the class
     * when they are private
     *
     * @param \ReflectionProperty[] $reflectionProperties indexed by property name
     *
     * @return void
     */
    public function setAccessorProperties(array $accessorProperties);

    /**
     * @return \ReflectionProperty[] indexed by property name
     */
    public function getAccessorProperties();
}