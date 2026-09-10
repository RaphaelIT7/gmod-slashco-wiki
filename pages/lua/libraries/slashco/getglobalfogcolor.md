<function name="GetGlobalFogColor" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the color set by <page>SlashCo.SetGlobalFogColor</page>.
		<note>
			Passing a `Vector` as `object` does not work correctly due to a bug - the color is always written into `object.r`/`g`/`b` fields as if `object` were a `Color`.
		</note>
	</description>
	<realm>Shared</realm>
	<group>Fog</group>
	<args>
		<arg name="type" type="number" optional>Controls the return format when `object` is not given. If omitted, returns a `Color`. If `1`, returns a `Vector` with components in the 0-1 range. If `2`, returns the r, g, b components as three separate numbers.</arg>
		<arg name="object" type="Color" optional>If given, the color is written directly into this object's `r`, `g` and `b` fields instead of a new value being returned</arg>
	</args>
	<rets>
		<ret name="color" type="Color|Vector" optional>The fog color as a `Color`, or as a `Vector` (0-1 range) if `type` is `1`. Not returned if `object` is given, or if `type` is `2`</ret>
		<ret name="r" type="number" optional>Red component (0-255), only returned if `type` is `2`</ret>
		<ret name="g" type="number" optional>Green component (0-255), only returned if `type` is `2`</ret>
		<ret name="b" type="number" optional>Blue component (0-255), only returned if `type` is `2`</ret>
	</rets>
</function>