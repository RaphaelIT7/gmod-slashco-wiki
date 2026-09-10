<function name="SetGlobalFogColor" parent="SlashCo" type="libraryfunc">
	<description>
		Sets the global fog color, used by the <page text="Fog">Fog</page> system. Read back using <page>SlashCo.GetGlobalFogColor</page>.<br>
		On map start this is initialized from the `env_fog_controller` entity's fog color, if one exists on the map.
	</description>
	<realm>Shared</realm>
	<group>Fog</group>
	<args>
		<arg name="color" type="Color|Vector">The new fog color. A `Vector` is assumed to use a 0-1 range and is scaled up to 0-255</arg>
	</args>
</function>