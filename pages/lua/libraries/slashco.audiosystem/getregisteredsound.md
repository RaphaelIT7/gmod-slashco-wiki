<function name="GetRegisteredSound" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Returns a copy of the given registered soundData
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="registerName" type="string">The registered name used for <page>SlashCo.AudioSystem.RegisterSound</page></arg>
	</args>
	<rets>
		<ret name="soundData" type="SoundData">Returns the found <page>SoundData</page> or `nil` on failure</ret>
	</rets>
</function>