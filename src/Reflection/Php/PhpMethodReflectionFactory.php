<?php declare(strict_types = 1);

namespace PHPStan\Reflection\Php;

use PHPStan\Reflection\ClassReflection;
use PHPStan\Type\Generic\TemplateTypeMap;
use PHPStan\Type\Type;

interface PhpMethodReflectionFactory
{

	/**
	 * @param \PHPStan\Type\Type[] $phpDocParameterTypes
	 *
	 */
	public function create(
		ClassReflection $declaringClass,
		?ClassReflection $declaringTrait,
		BuiltinMethodReflection $reflection,
		TemplateTypeMap $templateTypeMap,
		array $phpDocParameterTypes,
		?Type $phpDocReturnType,
		?Type $phpDocThrowType,
		?string $deprecatedDescription,
		bool $isDeprecated,
		bool $isInternal,
		bool $isFinal,
		?string $stubPhpDocString,
		?bool $isPure = null
	): PhpMethodReflection;

}
